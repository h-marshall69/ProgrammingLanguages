import os

nombreArchivo = 'miArchivo.txt'

os.system('cls')

# texto = 'Ingenieria de Sistemas'
texto = 'UNA Puno 2024'

try:
    archivo = open(nombreArchivo, 'a')
    archivo.write(texto + '\n')
    archivo.close()
    print(f'Se ha agregado el texto\n{texto}\nal archivo: {nombreArchivo}\n')
except IOError:
    print('Error al agregar texto al archivo:', nombreArchivo)
