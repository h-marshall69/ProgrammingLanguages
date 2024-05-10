//El programa pedira numeros y los ira sumando en una varible que tecnicamente se conoce como acumulador

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    int suma = 0;
    int numero = 1;
    
    while (numero != 0) {
        cout << "Ingrese un numero para sumarlo, (ingresa 0 para salir); ";
        cin >> numero;
        suma += numero; // suma = suma + numero
    }

    cout << "La suma de los numeros introducidos es: " << suma << endl;
    return 0;
}