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
    try {
        ofstream archivo(nombreArchivo);
        archivo.close();
    } catch (const exception& exception) {
        cerr << "Ocurrio un error al crear el archivo " << nombreArchivo << endl;
    }
    return 0;
}

