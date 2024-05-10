#include <iostream>
#include <string>
using namespace std;

int main() {
    string mensaje = "Bienvenidos a C++ desde la EPIS UNAP";
    size_t subCadena = mensaje.find("EPIS");

    if (subCadena != string::npos) {
        cout << "\nLa subcadena buscada está en la posición: " << subCadena << endl;
    } else {
        cout << "\nLa subcadena no fue encontrada." << endl;
    }

    return 0;
}
