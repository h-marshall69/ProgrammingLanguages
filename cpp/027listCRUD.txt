#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
using namespace std;

int main() {
    list <string> arreglo;
    while (true) {
        cout << "--MENU PRINCIPAL--"
            << "\n 1. Insertar un dato"
            << "\n 2. Eliminar un dato"
            << "\n 3. Buscar un dato"
            << "\n 4. Sobreescribir un dato"
            << "\n 5. Mostrar contenido del arreglo"
            << "\n 6. Salir\n";
        char opcion = 0;
        cout << "Elige una opcion: ";
        cin >> opcion;
        if (opcion == '1') {
            string dato = "";
            cout << "Ingrese el dato a insertar: ";
            cin >> dato;
            //getline(cin, dato);
            arreglo.push_back(dato);
            cout << "Dato insertado correctamente\n";
            this_thread::sleep_for(chrono::seconds(1));
            system("cls");
        }
        else if (opcion == '2') {
            string dato = "";
            arreglo.push_back(dato);
            cout << "Ingrese el dato a eliminar: ";
            cin >> dato;
            //getline(cin, dato);
            auto it = find(arreglo.begin(), arreglo.end(), dato);

            if ( it != arreglo.end()) {
                arreglo.erase(it);
                cout << "Dato eliminado correctamente\n";
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
            else {
                cout << "El dato no existe en el arreglo\n";
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
        }
        else if (opcion == '3') {
            string dato;
            cout <<("Ingrese el dato a buscar: ");
            cin >> dato;
            //getline(cin, dato);
            auto it = find(arreglo.begin(), arreglo.end(), dato);
            if (it != arreglo.end()) {
                int index = 0;
                for (auto it = arreglo.begin(); it != arreglo.end(); ++it)
                    index++;
                cout << "/nEl dato existe en el arreglo, en la posicion: "
                    << index;
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
            else {
                cout << "El dato no existe en el arreglo\n";
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
        }
        else if (opcion == '4') {
            string datoAnterior;
            cout << "Ingrese el dato a sobreescribir: ";
            cin >> datoAnterior;
            //getline(cin, dato);
            auto it = find(arreglo.begin(), arreglo.end(), datoAnterior);
            if (it != arreglo.end()) {
                string datoNuevo;
                cout << "Ingrese el nuevo dato: ";
                cin >> datoNuevo;
                //getline(cin, dato);
                *it = datoNuevo;
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
            else {
                cout << "El dato no existe en el arreglo\n";
                this_thread::sleep_for(chrono::seconds(1));
                system("cls");
            }
        }
        else if (opcion == '5') {
            cout << "El contenido del arreglo es :";
            for(auto it = arreglo.begin(); it != arreglo.end(); it++)
                cout << *it << " ";
            cout << endl;
            this_thread::sleep_for(chrono::seconds(1));
            system("cls");
        }
        else if (opcion == '6') {
            cout << "Saliendo del sistema...\n";
            break;
        }
        else {
            cout << "Opicon no valida, intente nuevamente.\n";
        }
            this_thread::sleep_for(chrono::seconds(1));
            system("cls");
    }
    return 0;
}
