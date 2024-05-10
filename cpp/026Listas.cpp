#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
#include <vector>
using namespace std;

int main() {
    vector<double> numeros; //lista vacia
    int contador = 0;
    //El usuario ingresara los datos

    for(int i = 0; i < 10; i++) {
        double numero;
        cout << "Ingrese un numero: ";
        cin >> numero;
        numeros.push_back(numero);
        contador++;
    }

    //Calcularemos la suma
    double suma = 0.0;
    for(double numero : numeros)
        suma += numero;

    //Mostrar la suma de los numeros al usuario
    cout << "La suma de los números introducidos es: " << suma << endl;
    cout << "El total de números introducidos fue: " << contador << endl;
    return 0;
}