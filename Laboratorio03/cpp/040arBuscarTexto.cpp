#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
#include <map>
#include <fstream>
#include <string>
#include <set>
using namespace std;
int main() {
    string nombreArchivo = "archivo.txt";
    //texto = "Ingenieria de Sistemas"
    string texto = "UNA Puno 2024";
    bool encontrado = false;
    try {
        ifstream  archivo(nombreArchivo);
        string linea;
        while (getline(archivo, linea)) {
            if (linea == texto) {
                encontrado = true;
                cout << "El texto: \n" << texto << "\n encontrado: " << linea << endl;
                break;
            }
        }

        archivo.close();

        if (!encontrado) {
            cout << "No se encontró el texto en el archivo: " << nombreArchivo << endl;
        }
    } catch (const exception& exception) {
        cerr << "Ocurrio un error al crear el archivo " << nombreArchivo << endl;
    }
    return 0;
}