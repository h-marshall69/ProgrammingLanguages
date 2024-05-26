import os

nombreArchivo = 'miArchivo.txt'

os.system("cls")

texto = 'UNA Puno 2024'

try:
    archivo = open(nombreArchivo, 'r')
    lineas = archivo.readlines()
    archivo.close()

    archivo = open(nombreArchivo, 'w')
    for linea in lineas:
        if linea.strip() != texto:
            archivo.write(linea)
    archivo.close()
    print(f'Se ha eliminado el texto\n{texto}\ndel archivo: {nombreArchivo}\n')

except IOError:
    print('Error al eliminar texto del archivo:', nombreArchivo)
