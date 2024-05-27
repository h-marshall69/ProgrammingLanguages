//Ordenar con el metodo burbuja, el cual por cierto es de los mas consumen recursos
//computacionalmente en el momento de ordenar sus datos

#include <iostream>
#include <list>
using namespace std;

int main() {
    int datos [] = {55, 300, 27, 12, 9, 15};
    cout << "El arreglo original es: ";
    int n = sizeof(datos) / sizeof(datos[0]); // Obtener el tamaño del arreglo correctamente
    for(int i = 0; i < n; i++) // Corregir el bucle para usar el tamaño correcto
        cout << datos[i] << " ";
    cout << endl;
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
    cout << "/nEl arreglo ordenado es: ";
    for(int i = 0; i < n; i++)
        cout << datos[i] << " ";
    return 0;
}
