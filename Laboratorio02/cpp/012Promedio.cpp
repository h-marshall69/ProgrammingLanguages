//El programa muestra y calcula el promedio de las calificaciones de un estudiante
#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

int main() {
    cout << "El progrma calculara el promedio de tus 3 calificaciones\n";
    string nombre;
    cout << "Escribe tu nombre: ";
    cin >> nombre;
    float mat, fis, quim;
    cout << "Escribe tu nota de Matematicas: ";
    cin >> mat;
    cout << "Escribe tu nota de Fisica: ";
    cin >> fis;
    cout << "Escribe tu nota de Quimica: ";
    cin >> quim;
    /*
    prioridad de operaciones aritmeticos
    () y * primer lugar
    * y /  segundo lugar
    + -    tercer lugar
    */

    float prom = (mat + fis + quim)/ 3;
    cout << nombre << " tu promedio es: " << fixed << setprecision(2) << prom << endl;
    return 0;
}
