//El programa pedira numeros mientras los ingresados esten entre el 0 y 99

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    int edad = 0;
    do {
        cout << "Escribe tu numero: ";
        cin >> edad;
        if (edad < 0 || edad > 99)
            cout << "Edad no valida, intente de nuevo por vafor..." << endl;
    } while(edad < 0 || edad > 99);
    cout << "Su edad es: " << edad << endl;
    return 0;
}