//El programa pedira numeros para promediarlos, para salir ingresa -1

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
        cout << "Escribe un numero para sumar (Ingrese -1 para salir): ";
        cin >> numero;
        suma += numero;
        contador++;
    } while (numero != -1);

    if (contador > 0) {
        float promedio = suma / float(contador);
        cout << "La suma de los numeros es: " << suma << endl;
        cout << "El total de numeros introducidos es: " << contador << endl;
        cout << "El promedio de los numeros ingresados es: " << promedio << endl; 
    }
    return 0;
}