// CRUD (create, Read, Update, Delete) con conexion a Base de datos
// Libreria a utlizar: pip mysql-connector-python

/*
    CREATE DATABASE sisteams;
    USE sistemas;
    CREATE TABLE personas (
        dni varchar(8) NOT NULL,
        apellidopa varchar(50) NOT NULL,
        apellidoma varchar(50) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utfmb4 COLLATE = utf8mb4_general_ci;

    ALTER TABLE personas
        ADD PRIMARY KEY (dni);
    COMMIT;
*/


#include <iostream>
#include <string>
#include <windows.h>

using namespace std;

void insertarDato() {
    string dni, nombres, apellidopa, apellidoma;

    cout << "Ingresa el dni a insertar: ";
    cin >> dni;
    cout << "Ingresa el nombre: ";
    cin >> nombres;
    cout << "Ingresa el apellido paterno: ";
    cin >> apellidopa;
    cout << "Ingresa el apellido materno: ";
    cin >> apellidoma;

    string query = "INSERT INTO personas (dni, nombres, apellidopa, apellidoma) VALUES ('" + dni + "', '" + nombres + "', '" + apellidopa + "', '" + apellidoma + "')";
    system(("C:\\xampp\\mysql\\bin\\mysql -u root -p sistemas -e \"" + query + "\"").c_str());
}

void eliminarDato() {
    string dni;

    cout << "Ingresa el dni a eliminar: ";
    cin >> dni;

    string query = "DELETE FROM personas WHERE dni='" + dni + "'";
    system(("C:\\xampp\\mysql\\bin\\mysql -u root -p sistemas -e \"" + query + "\"").c_str());
}

void buscarDato() {
    string dni;

    cout << "Ingresa el dni a buscar: ";
    cin >> dni;

    string query = "SELECT * FROM personas WHERE dni='" + dni + "'";
    int result = system(("C:\\xampp\\mysql\\bin\\mysql -u root -p sistemas -e \"" + query + "\"").c_str());
    if (result == 0) {
        cout << "El dni está en la tabla." << endl;
    } else {
        cout << "El dni no existe en la tabla." << endl;
    }
}

void sobreescribirDato() {
    string datoAnterior, datoNuevo;

    cout << "Ingresa el dni a sobreescribir: ";
    cin >> datoAnterior;
    cout << "Ingresa el nuevo dni: ";
    cin >> datoNuevo;

    string query = "UPDATE personas SET dni='" + datoNuevo + "' WHERE dni='" + datoAnterior + "'";
    system(("C:\\xampp\\mysql\\bin\\mysql -u root -p sistemas -e \"" + query + "\"").c_str());
}

void mostrarContenido() {
    system("C:\\xampp\\mysql\\bin\\mysql -u root -p sistemas -e \"SELECT * FROM personas\"");
}

int main() {
    int opcion;

    while (true) {
        cout << "--MENU DEL SISTEMA---\n"
                " 1. Insertar un dato.\n"
                " 2. Eliminar un dato.\n"
                " 3. Buscar un dato.\n"
                " 4. Sobreescribir un dato.\n"
                " 5. Mostrar el contenido de la lista.\n"
                " 6. Salir del sistema.\n";

        cout << "Elige una opción: ";
        cin >> opcion;

        switch (opcion) {
            case 1:
                insertarDato();
                break;
            case 2:
                eliminarDato();
                break;
            case 3:
                buscarDato();
                break;
            case 4:
                sobreescribirDato();
                break;
            case 5:
                mostrarContenido();
                break;
            case 6:
                char respuesta;
                cout << "Estás seguro? (s/n)";
                cin >> respuesta;
                if (toupper(respuesta) == 'S') {
                    cout << "Saliendo del sistema..." << endl;
                    Sleep(2000);
                    system("cls");
                    return 0;
                }
                Sleep(2000);
                system("cls");
                break;
            default:
                cout << "Opción no válida, intenta de nuevo..." << endl;
                Sleep(2000);
                system("cls");
                break;
        }
    }

    return 0;
}