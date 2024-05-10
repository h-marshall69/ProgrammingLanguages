//Instrucciones break, Ejecuta un ciclo del 1 al 10 e emprime cada numero, al usar la instrccion break,
//haremos que cuando el contador llegue al numero 6, se salga del siclo

#include <iostream>
#include <list>
using namespace std;

int main() {
    for(int i = 0; i < 11; i++) {
        if (i == 6) {
            cout << "adios..."; 
            break;
        }
        else
            cout << "i vale: " << i << endl;
    }
        
    return 0;
}