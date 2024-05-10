//El programa pedira una cantidad en pesos y mostrara un menu de opciones para convertir a dolares o a Soles Peruanos

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main() {
    float pesos;
    cout << "Escriba la cantidad en pesos Mexicanos: ";
    cin >> pesos;
    int opcion;
    cout << "\nA cual moneda desea convertir:\n1. Dolares $17\n2. Soles Peruanos $4\n";
    cin >> opcion;
    
    string mensaje1 = "La cantidad convertida en Dolares es: ";
    string mensaje2 = "La cantidad convertida en Soles Peruanos es: ";
    if (opcion == 1) {
        float total = pesos/17;
        cout << mensaje1 << fixed << setprecision(4) << total << endl;
    }
    else if (opcion == 2) {
        float total = pesos/4;
        cout << mensaje2 << fixed << setprecision(4) << total << endl;
    }
    else
        cout << "Eligiste una opcion no valida..." << endl;

    return 0;
}