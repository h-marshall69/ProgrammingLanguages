//Convertiremos de metros a kilometros y a centimetros segun lo solicite el usuario

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    float distancia;
    cout << "Escribe la cantidad en metros: ";
    cin >> distancia;
    string opcion;
    cout << "\n A que lo quieres convertir?\n a. Convertir a kilometros\n b. Convertir a centimetros\n c. Convertir a pulgadas\n";
    cin >> opcion;

    if (opcion == "a") {
        float total = distancia/1000;
        cout << "La cantidad convertida a kilometros es: " << total << endl;
    }
    else if (opcion == "b") {
        float total = distancia * 100;
        cout << "La cantidad convertida en centimetros es: " << total << endl;
    }
    else if (opcion == "c") {
        float total = (distancia*100)/2.54;
        cout << "La cantidad convertida en pulgadas es: " << total << endl;
    }
    else
        cout << "Opcion no valida..." << endl;

    return 0;
}