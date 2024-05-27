#include <iostream>
#include <string>
using namespace std;

int main() {
    string mensaje = "Bienvenidos a C++ desde la EPIS UNAP";
    size_t subCadena = mensaje.find("EPIS");

    if (subCadena != string::npos) {
        cout << "\nLa subcadena buscada esta en la posicion: " << subCadena << endl;
    } else {
        cout << "\nLa subcadena no fue encontrada." << endl;
    }

    return 0;
}
