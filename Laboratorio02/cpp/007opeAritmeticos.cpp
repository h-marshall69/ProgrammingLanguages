//Uso de operaciones aritmeticos

#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    cout << "Exponentes:\n";
    int num = 4;
    int exponente = 3;
    //int resultado = num**exponente;
    int resultado = pow(num, exponente);
    cout << "El resultado de la exponenciacion es: " << resultado << endl;
    
    cout << "\nDivision entera:\n";
    int n1 = 10;
    int n2 = 3;
    resultado = n1/n2;
    cout << "La parte entera de la division es: " << resultado;

    cout << "\nModulo o resto de una division\n";
    n2 = 2; //El resultado de la division da 0 cuando no hay fraccion y 1 si la hay
    resultado = n1%n2;
    cout << "El modulo o resto de la division es: " << resultado;
    return 0;
}