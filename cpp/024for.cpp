//El programa lee un arreglo de numeros y se detiene la cantidad de segundos indica el numero leido

#include <iostream>
#include <chrono>
#include <thread>
#include <vector>
using namespace std;

int main() {
    for (int i : vector<int>{5, 1, 4, 6, 3, 2, 1}) {
        cout << "Habrá un retardo de " << i << " segundos" << endl;
        this_thread::sleep_for(chrono::seconds(i));
    }

    return 0;
}