from PyQt5.QtWidgets import QApplication

from ui.qt.view.main_menu_ui import MainMenuUi


class CastlevaniaInventoryQt:
    def __init__(self):
        self.app = QApplication([])
        self.ui = MainMenuUi()

    def run(self):
        self.ui.show()
        self.app.exec_()
