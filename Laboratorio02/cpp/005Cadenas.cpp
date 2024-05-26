//Extraer una subcadena de una cadena de texto

#include <iostream>
#include <string>
using namespace std;

int main() {
    string texto = "Bienvenidos a C++ desde la EPIS UNAP";
    string sub_cadena = texto.substr(14, 21); //sanke case o estilo serpiente mi_variable

    cout << sub_cadena << endl;

    return 0;
}
