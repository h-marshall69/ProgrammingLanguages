import os

nombreArchivo = 'miArchivo.txt'

os.system('cls')

texto = 'Sistemas'

try:
    archivo = open(nombreArchivo, 'r')
    lineas = archivo.readlines()
    archivo.close()
    
    encontrado = False
    
    for linea in lineas:
        if texto in linea:
            encontrado = True
            print(f'El texto:\n{texto}\nencontrado: {linea.strip()}\n')
    
    if not encontrado:
        print('No se encontró el texto en el archivo:', nombreArchivo)

except IOError:
    print('Error al buscar texto en el archivo:', nombreArchivo)
