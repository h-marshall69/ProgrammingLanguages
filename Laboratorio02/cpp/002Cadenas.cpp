//Concatenacion o union de cadenas usando solo una variable
#include <iostream>
using namespace std;

int main() {
    string mensaje = "Bienvenidos";
    mensaje += " a";// mensaje = mensaje + ' a'
    mensaje += " Python";
    cout << mensaje << endl;
    return 0;
}