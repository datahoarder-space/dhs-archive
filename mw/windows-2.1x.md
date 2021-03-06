[[File:Windows_2.1x.png]] 

'''Windows 2.1x''' (marketed as '''Windows/286''' and '''Windows/386''') is a family of Microsoft Windows graphical user interface-based operating environments.

Windows/286 2.10 and Windows/386 2.10 were released on May 27, 1988, less than six months after the release of Windows 2.0. These versions can take advantage of the specific features of the Intel 80286 and Intel 80386 processors. A hard disk was required for the first time to install Windows.

== Editions ==
Two editions of Windows 2.1x were released, both of which could take advantage of the Intel processor for which they were designed.

=== Windows/286 ===
Windows/286 takes advantage of the HMA to increase the memory available to Windows programs. It introduced the HIMEM.SYS DOS driver for this purpose. It also includes support for several EMS boards, although this support is not related to the 80286 processor. The segmented nature of 16-bit Windows programs is quite suited to the usage of EMS, as portions of code and data can be made visible in the first megabyte of memory accessible to real-mode programs only when the program using them is given control. Microsoft encouraged users to configure their computers with only 256KB of main memory, leaving the address space from 256-640KB available for dynamic mapping of EMS memory.

Despite its name, Windows/286 was fully operational on an 8088 or 8086 processor. Windows/286 would simply not use the high memory area since none existed on an 8086-class processor; however, EMS could still be used, if present. A few PC vendors shipped Windows/286 with 8086 hardware; an example was IBM's PS/2 Model 25, which had an option to ship with a "DOS 4.00 and Windows kit" for educational markets, which included word processing and presentation software useful for students, which resulted in some confusion when purchasers of this system received a box labeled Windows/286 with a machine that was definitely less than an 80286.

=== Windows/386 ===
Windows/386 was much more advanced than its predecessor. It introduced a protected mode kernel, above which the GUI and applications run as a virtual 8086 mode task. It allowed several MS-DOS programs to run in parallel in "virtual 8086" CPU mode, rather than always suspending background applications. (Windows applications could already run in parallel through cooperative multitasking.) With the exception of a few kilobytes of overhead, each DOS application could use any available low memory before Windows was started.

Windows/386 also provided EMS emulation, using the memory management features of the 80386 to make RAM beyond 640k behave like the banked memory previously only supplied by add-in cards and used by popular DOS applications. (By overwriting the WIN200.BIN file with COMMAND.COM, it is possible to use the EMS emulation in DOS without starting the Windows GUI.) There was no support for disk-based virtual memory, so multiple DOS programs had to fit inside the available physical memory; therefore, Microsoft suggested buying additional memory and cards if necessary.

Neither of these versions worked with DOS memory managers like CEMM or QEMM or with DOS extenders, which have their own extended memory management and run in protected mode as well. This was remedied in version 3.0, which is compatible with Virtual Control Program Interface (VCPI) in "standard mode" and with DOS Protected Mode Interface (DPMI) in "386 enhanced" mode (all versions of Windows from 3.0 to 98 exploit a loophole in EMM386 to set up protected mode). Windows 3.0 also had the capability of using the DWEMM Direct Write Enhanced Memory Module. This is what enables the far faster and more sleek graphical user interface, as well as true extended memory support.

''BYTE'' in 1989 listed Windows/386 as among the "Distinction" winners of the BYTE Awards, describing it as "serious competition for OS/2" as it "taps into the power of the 80386".

== Windows 2.11 ==
On March 13, 1989, Windows 2.11 was released in Windows/286 and Windows/386 editions, with some minor changes in memory management, AppleTalk support and faster printing and updated printer drivers.

Windows 2.11 was superseded by Windows 3.0 in May 1990, but supported by Microsoft for twelve years, until December 31, 2001.
