#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
#include <map>
using namespace std;

int main() {
    map<string, map<string, string>> empleados = {
        {"001", {{"nombre", "Juan"}, {"edad", "30"}, {"puesto", "Administrador"}}},
        {"002", {{"nombre", "Maria"}, {"edad", "25"}, {"puesto", "Analista"}}},
        {"003", {{"nombre", "Pedro"}, {"edad", "35"}, {"puesto", "Desarrollador"}}}
    };
    
    cout << "Imprimiremos datos de un determinado empleado: " << endl;
    cout << "Imformacion del empleado con codigo 002: " << endl;
    cout << "Nombre: " << empleados["002"]["nombre"] << endl;
    cout << "Edad: " << empleados["002"]["edad"] << endl;
    cout << "Puesto: " << empleados["002"]["puesto"] << endl;

    cout << "\nInformacion de todos los empleados: \n";
    for(auto it : empleados) {
        cout << "codigo: " << it.first << endl;
        cout << "nombre: " << it.second["nombre"] << endl;
        cout << "edad: " << it.second["edad"] << endl;
        cout << "puesto: " << it.second["puesto"] << endl;
        cout << "--------------------" << endl;
    }

    cout << "Agregamos el empleado con clave 004...\n";
    empleados["004"] = {{"nomnre", "Laura"}, {"edad", "28"}, {"puesto", "Diseniadora"}};

    cout << "\nInformacion de todos los empleados: \n";
    for(auto it : empleados) {
        cout << "codigo: " << it.first << endl;
        cout << "nombre: " << it.second["nombre"] << endl;
        cout << "edad: " << it.second["edad"] << endl;
        cout << "puesto: " << it.second["puesto"] << endl;
        cout << "--------------------" << endl;
    }
    
    return 0;
}
