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
    try {
        ifstream  archivo(nombreArchivo);
        ofstream  archivoTem(nombreArchivo);
        archivoTem << texto << endl;
        set<string> lineasUnicas;
        string lineas;
        string linea;
         while (getline(archivo, linea)) {
            if (linea != texto) {
                lineas += linea + "\n";
            }
        }

        archivoTem << lineas;
        archivo.close();
        cout << "Se ha eliminado el texto \n" << texto << "\nal archivo: " << nombreArchivo << endl;
    } catch (const exception& exception) {
        cerr << "Ocurrio un error al crear el archivo " << nombreArchivo << endl;
    }
    return 0;
}