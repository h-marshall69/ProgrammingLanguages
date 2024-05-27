//Concatenacion de variables, durante la impresionion en pantalla
#include <iostream>
using namespace std;

int main() {
    string mensaje1 = "\nBienvenidos";
    string mensaje2 = " a";
    string mensaje3 = " C++ desde la EPIS UNAP\n";

    cout << "Impresion: " << mensaje1 + mensaje2 + mensaje3 << " Fin de la impresion" << endl;
    return 0;
}
