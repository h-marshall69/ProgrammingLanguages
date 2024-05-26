//Hallar si un numero es par o impar

#include <iostream>
#include <list>
#include <cmath>
#include <iomanip>
using namespace std;

int main() {
    int numero = 0;
    cout << "Escribe un numero y determina si es par o impar: ";
    cin >> numero;
    if (numero%2 == 0)
        cout << "\nEl numero " << numero << " es par\n";
    else
        cout << "\nEl numero " << numero << " es impar\n";
    return 0;
}