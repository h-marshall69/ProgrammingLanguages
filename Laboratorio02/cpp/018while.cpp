/*
estructura selectivas
if      if--else    if--else if--else if-- else

estructuras repetitivas
while
do -- while 
for
carateristicas
while -- puede que nunca se ejecute
do -- while --- al menos una vez se va a entrar a este ciclo
for -- casi siempre que se entre al ciclo, se sabe cuantas veces se va 
        a repetir, es muy utilizado para manipular estructuras de datos
*/

#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main () {
    //Simularemos el conteo del despues de un cohete
    int contador =  10;
    cout << "Inicia el conteo regresivo..." << endl;
    while (contador > 0) {
        cout << contador << endl;
        contador--;
    }

    cout << "El cohete ha despegado con exito..." << endl;
    return 0;
}