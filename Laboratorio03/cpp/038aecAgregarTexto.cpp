#include <iostream>
#include <list>
#include <cstdlib>
#include <algorithm>
#include <thread>
#include <chrono>
#include <map>
#include <fstream>
using namespace std;
int main() {
    string nombreArchivo = "archivo.txt";
    //texto = "Ingenieria de Sistemas"
    string texto = "UNA Puno 2024";
    try {
        ofstream archivo(nombreArchivo);
        archivo << texto << endl;
        archivo.close();
        cout << "Se ha agregado el texto \n" << texto << "\nal archivo: " << nombreArchivo << endl;
    } catch (const exception& exception) {
        cerr << "Ocurrio un error al crear el archivo " << nombreArchivo << endl;
    }
    return 0;
}