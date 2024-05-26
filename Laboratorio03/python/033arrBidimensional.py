#Manipula un arreglo bidimensional de 3x3 elementos
#Crear el arreglo bidimensional o matriz
matriz = [[1,2,3],
            [4,5,6], 
            [7,8,9]]
#Acceder a un elemento específico de una matriz elemento-matriz[1][2]
#Recorrer la matriz y mostrar sus elementos 
for fila in matriz:
    for elemento in fila:
        print (elemento, end='')
    print() 