//El usuario indicara un numero de dia y se le imprimira el nombre de ese dia
#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    string nombre;
    int dia;
    cout << "Escribe tu nombre: ";
    cin >> nombre;
    cout << "Escribe el numero del dia que quieras venir a trabajar: ";
    cin >> dia;
    // = asignacion     == comparacion
    if (dia == 1)
        cout << nombre << " felicidades vendras a trabajar el dia Lunes: " << endl;
    else if (dia == 2)
        cout << nombre << " felicidades vendras a trabajar el dia Martes: " << endl;
    else if (dia == 3)
        cout << nombre << " felicidades vendras a trabajar el dia Miercoles: " << endl;
    else if (dia == 4)
        cout << nombre << " felicidades vendras a trabajar el dia Jueves: " << endl;
    else if (dia == 5)
        cout << nombre << " felicidades vendras a trabajar el dia Viernes: " << endl;
    else if (dia == 6)
        cout << nombre << " felicidades vendras a trabajar el dia Sabado: " << endl;
    else if (dia == 7)
        cout << nombre << " felicidades vendras a trabajar el dia Domingo: " << endl;
    else 
        cout << nombre << " lo sentimos, ese dia no existe..." << endl;
    return 0;
}