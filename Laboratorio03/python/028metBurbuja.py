#Ordenar con el método burbuja, el cual por cierto es de los que más consumen recurso 
#computacional en el momento de ordenar sus datos

datos=[55,300, 27,12,9,15]
print('El arreglo original es: ',datos)
n=len(datos)

for i in range(n-1):
    for j in range((n-1)-i):
        print('i vale: ',i,' y ','j vale: ',j) 
        if (datos[j]>datos [j+1]):
            datos[j], datos [j+1]=datos [j+1], datos [j] 
print('El arreglo ordenado es: ',datos)