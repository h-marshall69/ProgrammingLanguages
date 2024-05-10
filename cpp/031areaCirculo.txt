//Programa que calcula y muestra el area de un circulo, tiene como parametro el radio
// y retorma el area calculada

#include <iostream>
#include <list>
#include <cmath>
#include <iomanip>
using namespace std;

int main() {
    double radio = 0.0;
    cout << "Escribe el radio del circulo y calcula su area: ";
    cin >> radio;
    double area = M_PI*pow(radio, 2);

    cout << "\nEl area del circulo es: " << fixed << setprecision(2) << area;
    return 0;
}