//Ordenar con el metodo burbuja, el cual por cierto es de los mas consumen recursos
//computacionalmente en el momento de ordenar sus datos

#include <iostream>
#include <list>
using namespace std;

int main() {
    int datos [] = {55, 300, 27, 12, 9, 15};
    cout << "El arreglo original es: ";
    for(int i = 0; i < size(datos); i++)
        cout << datos[i] << " ";
    cout << endl;
    int n = size(datos);
    for(int i = 0; i < n - 1; i++) {
        for(int j = 0; j < n - 1 - i; j++) {
            cout << "i vale: " << i << " Y " << "j vale: " << j << endl;
            if (datos[j] > datos[j + 1]) {
                int temp = datos[j];
                datos[j] = datos[j + 1];
                datos[j + 1] = temp;
            }
        }
    }
    cout << "El arreglo ordenado es: ";
    for(int i = 0; i < size(datos); i++)
        cout << datos[i] << " ";
    return 0;
}