@echo off
cd C\Program Files\Mozilla Firefox
start firefox.exe
ping -n 05 127.0.0.1>nul
start /wait firefox.exe imacros.//run/?m=ParserMain.iim
