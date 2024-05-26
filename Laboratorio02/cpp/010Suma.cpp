//Progrma que suma 2 numeros introducidos desde el teclado

#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    //Entrada de datos
    int n1;
    int n2;
    cout << "Escribe el primer dato a sumar: ";
    cin >> n1;
    cout << "Escribe el segundo dato a sumar: ";
    cin >> n2;

    //Procesamiento de datos
    int resultado = n1 + n2;
    cout << "El resultado de la suma es: " << resultado;
    return 0;
}