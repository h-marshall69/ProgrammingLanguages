//Manipula un arreglo bidimensional de 3x3 elementos

#include <iostream>
#include <list>
#include <cmath>
#include <iomanip>
using namespace std;

int main() {
    //Crear el arreglo bidimensional o matriz
    int matriz [][3]= {{1, 2, 3}, {4, 5, 6}, {7, 8, 9}};

    //Acceder a un elemento especifico de una matriz
    int elemento = matriz[1][2];

    //Recorrer la matriz y mostrar sus elemntos
    for(int i = 0; i < 3; i++) {
        for(int j = 0; j < 3; j++)
            cout << matriz[i][j] << " ";
        cout << endl;
    }
        
    return 0;
}