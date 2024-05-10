//El Programa evaluara la estatura y si la estatura es menor que 160 cms imprimira: Eres de estatura baja
//si esta entre 160 y entre 175 cms imprimira: Eres de estatura mediana si es mayor a 175 cms imprimira: Eres alto
#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    string nombre;
    int estatura;
    cout << "Escribe tu nombre: ";
    cin >> nombre;
    cout << "Escribe tu estatura en centimetros: ";
    cin >> estatura;

    if (estatura < 160) {
        cout << nombre << " Eres de estaura baja..." << endl;
    }
    if (estatura >= 160 && estatura <= 175) {
        cout << nombre << " Eres de estaura madiana..." << endl;
    }
    if (estatura > 175) {
        cout << nombre << " Eres de estaura alta..." << endl;
    }

    /*
    if(condicion)
        acciones

    if(condicion)
        acciones1
    else
        acciones2

    if(condicion1)
        acciones A
    else is(condicion2)
        acciones B
    else if(condicion3)
        acciones C
    else:
        acciones Z
    */
    return 0;
}