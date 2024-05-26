//El programa pedira numeros para promediarlos
#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    int contador = 0;
    int suma = 0;
    int numero = 0;
    do {
        cout << "Escribe un numero para sumarlo (Ingrese 0 para salir): ";
        cin >> numero;
        suma += numero;
        contador++;
    } while (numero != 0);

    if (contador > 0) {
        float promedio = suma / float(contador);
        cout << "La suma de los numeros es: " << suma << endl;
        cout << "El total de numeros introducidos por el usuario son: " << contador << endl;
        cout << "El promedio de los numeros ingresados es: " << promedio << endl; 
    }
    else
        cout << "No se ingresaron numeros validos..." << endl;
    return 0;
}