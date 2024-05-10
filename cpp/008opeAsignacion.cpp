//Operadores de asignacion

#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    int num1 = 5;
    int num2 = 2;
    cout << "La varible num1 vale: " << num1 << endl;
    cout << "La varible num2 vale: " << num2 << endl;
    num1 += num2; // num1 = num1 + num2
    cout << "Usando el operador += num1 ahora vale: " << num1 << endl;
    num1 = 5;
    num1 -= num2;
    cout << "Usando el operador -= num1 ahora vale: " << num1 << endl;
    num1 = 5;
    num1 *= num2;
    cout << "Usando el operador *= num1 ahora vale: " << num1 << endl;
    num1 = 5;
    num1 /= num2;
    cout << "Usando el operador /= num1 ahora vale: " << num1 << endl;
    return 0;
}