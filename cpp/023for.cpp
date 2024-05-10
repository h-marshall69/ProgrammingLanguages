//El programa imprira un saludo en forma particular

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    cout << "Imprimiremos la cadena de texto ¡EPIS UNAP! usando el ciclo for" << endl;

    for(auto letra: "¡EPIS UNAP!") {
        cout << letra << endl;
    }
    return 0;
}