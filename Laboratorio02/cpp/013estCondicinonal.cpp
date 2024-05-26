//El programa determina si puedes votar o no
#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main() {
    int edad;
    cout << "Escribe tu edad por favor: ";
    cin >> edad;
    if (edad < 18) {
        cout << "No puedes votar" << endl;
    }
    else {
        cout << "Si puedes votar" << endl;
    }
    return 0;
}