#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
using namespace std;

int main() {
    int filas = 3;
    int columnas = 3;

    int matriz [filas][columnas];

    for(int i = 0; i < filas; i++)
        for(int j = 0; j < columnas; j++)
            matriz[i][j] = 0;


    for(int i = 0; i < filas; i++) {
        for(int j = 0; j < columnas; j++) {
            int dato = 0;
            cout << "Ingrese el dato para la posicion (" << i << "," << j << ")" << ": ";
            cin >> dato;
            matriz [i][j] = dato;
        }
    }
    cout << "\nLos datos del arreglo bidimensional son: \n";
    for(int i = 0; i < filas; i++) {
        for(int j = 0; j < columnas; j++)
            cout <<  matriz[i][j] << " ";
        cout << endl;
    }

    cout << endl;
    //Imprime la diagonal principal
    for(int i = 0; i < 3; i++) {
        for(int j = 0; j < 3; j++)
            if (i == j)
                cout << matriz[i][j] << " ";
    }
    return 0;
}
