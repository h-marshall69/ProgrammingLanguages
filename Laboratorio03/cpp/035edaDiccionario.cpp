#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
#include <map>
using namespace std;

int main() {
    map<string, string> diccionario;

    diccionario["nombre"] = "Lenin";
    diccionario["edad"] = "45";
    diccionario["ciudad"] = "Puno";

    for (const auto& par : diccionario)
        cout << par.first << " : " << par.second << endl;

    cout << "El nombre del usuario es: " << diccionario["nombre"] << endl;
    cout << "La edad del usuario es " << diccionario["edad"] << endl;
    cout << "La ciudad del usuario es: " << diccionario["ciudad"];

    cout << "se actualiza algunos datos:\n";

    diccionario["edad"] = "27";

    for (const auto& par : diccionario)
        cout << par.first << " : " << par.second << endl;

    cout << "Eliminar el elemento ciudad del diccionario: " << endl;
    diccionario.erase("ciudad");

    for (const auto& par : diccionario)
        cout << par.first << " : " << par.second << endl;

    if (diccionario.find("nombre") != diccionario.end())
        cout << "La clave \"nombre\" existe en el diccionario" << endl;
    if (diccionario.find("ciudad") != diccionario.end())
        cout << "La clave \"ciudad\" existe en el diccionario" << endl;
    else
        cout << "La clave \"ciudad\" No existe en el diccionario" << endl;

    int cantidadElementos = diccionario.size();
    cout << "El diccionario tiene: " << cantidadElementos << " Elementos" << endl;

    for (const auto& par : diccionario)
        cout << par.first << " : " << par.second << endl;
    return 0;
}
