//Suma de dos numeros introducidos desde teclado

#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

int main() {
    //Entrada de datos
    float n1;
    float n2;
    cout << "Escribe el primer dato a sumar: ";
    cin >> n1;
    cout << "Escribe el segundo dato a sumar: ";
    cin >> n2;

    //Procesamiento de datos
    float resultado = n1 + n2;
    cout << "El resultado de la suma es: " << fixed << setprecision(2) << resultado;
    return 0;
}