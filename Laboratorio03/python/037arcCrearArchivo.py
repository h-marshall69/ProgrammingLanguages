import os

nombreArchivo = 'miArchivo.txt'

os.system("cls")

try:
    archivo = open(nombreArchivo, 'w')
    archivo.close()
    print('Se ha creado el archivo:', nombreArchivo, '\n')
except IOError:
    print('Ocurrió un error al crear el archivo:', nombreArchivo)
