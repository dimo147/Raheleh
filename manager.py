import pysftp
from tkinter import *
from tkinter import filedialog as fd
from tkinter.messagebox import showinfo

root = Tk()
root.title('Upload file')
root.resizable(False, False)
root.geometry("300x150")

def select_file():
    filename = fd.askopenfilename(
        title='Open a file',
        initialdir='/home/dimo/Documents/'
    )

    showinfo(
        title='Selected File',
        message=filename
    )
    srv = pysftp.Connection(
        host="access969539652.webspace-data.io",
        username="u112911477",
        password="Ry@nR0j@n2013SFTP",
        log="./pysftp.log",
    )

    with srv.cd('/images/paintings/'):
        srv.put(filename)
    srv.close()

open_button = Button(
    root,
    text='Open File',
    command=select_file
)

open_button.pack(expand=True)

root.mainloop()

