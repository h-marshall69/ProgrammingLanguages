//Instrucciones continue, el programa #imprime numeros del 1 al 10, pero omitira la impresion cuando
//el modulo de la divicion sea igual a cero, es decir cuando el nuemro es par.
#include <iostream>
#include <list>
using namespace std;

int main() {
    for(int i = 0; i < 11; i++) {
        if (i%2 == 0) {
            cout << "impresion omitida por ser nuemro par...\n"; 
            continue;
        }
        cout << "i vale: " << i << endl;
    }
        
    return 0;
}