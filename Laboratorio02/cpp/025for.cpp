//Recorriendo otra lista
#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
#include <vector>
using namespace std;

int main () {
    vector<string> frutas = {"manzana", "pera", "durazno", "uva", "melon"};

    for(auto fruta : frutas)
        cout << fruta << endl;
    return 0;
}