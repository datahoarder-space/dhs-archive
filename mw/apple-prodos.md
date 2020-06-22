ProDOS is the name of two similar operating systems for the Apple II series of personal computers. The original ProDOS, renamed ProDOS 8 in version 1.2, is the last official operating system usable by all 8-bit Apple II series computers, and was distributed from 1983 to 1993. The other, ProDOS 16, was a stop-gap solution for the 16-bit Apple IIgs that was replaced by GS/OS within two years.

ProDOS was marketed by Apple as meaning Professional Disk Operating System, and became the most popular operating system for the Apple II series of computers 10 months after its release in January 1983.

== Background ==
ProDOS was released to address shortcomings in the earlier Apple operating system (called simply DOS), which was beginning to show its age.

Apple DOS only has built-in support for 5.25" floppy disks and requires patches to use peripheral devices such as hard disk drives and non-Disk-II floppy disk drives, including 3.5" floppy drives. ProDOS adds a standard method of accessing ROM-based drivers on expansion cards for disk devices, expands the maximum volume size from about 400 kilobytes to 32 megabytes, introduces support for hierarchical subdirectories (a vital feature for organizing a hard disk's storage space), and supports RAM disks on machines with 128kB or more of memory. ProDOS addresses problems with handling hardware interrupts, and includes a well-defined and documented programming and expansion interface, which Apple DOS had always lacked. Although ProDOS also includes support for a real-time clock (RTC), this support went largely unused until the release of the Apple IIgs, the first in the Apple II series to include an RTC on board. Third-party clocks were available for the II Plus, IIe, and IIc, however.

ProDOS, unlike earlier Apple DOS versions, has its developmental roots in SOS, the operating system for the ill-fated Apple III computer released in 1980. Pre-release documentation for ProDOS (including early editions of Beneath Apple ProDOS) documented SOS error codes, notably one for switched disks, that ProDOS itself could never generate. Its disk format and programming interface are completely different from those of Apple DOS, and ProDOS cannot read or write DOS 3.3 disks except by means of a conversion utility; while the low-level track-and-sector format of DOS 3.3 disks was retained for 5.25 inch disks, the high-level arrangement of files and directories is completely different. For this reason, most machine-language programs that run under Apple DOS will not work under ProDOS. However, most BASIC programs work, though they sometimes require minor changes. A third-party program called DOS.MASTER enables users to have multiple virtual DOS 3.3 partitions on a larger ProDOS volume.

With the release of ProDOS came the end of support for Integer BASIC and the original Apple II model, which had long since been effectively supplanted by Applesoft BASIC and the Apple II Plus. Whereas DOS 3.3 always loads built-in support for BASIC programming, under ProDOS this job is given to a separate system program called BASIC.SYSTEM, which one launches to run and write Applesoft BASIC programs. BASIC itself continued to be built into the Apple ROMs; BASIC.SYSTEM is merely a command interpreter enhancement that allows BASIC programs to access ProDOS by means of the same "Control-D" text output they had used under DOS 3.3. BASIC.SYSTEM alone requires about as much memory as the whole of DOS 3.3. Since the ProDOS kernel itself is stowed away in the "Language Card" RAM, the usable amount of RAM for BASIC programmers remains the same under ProDOS as it had been under DOS 3.3.

Despite ProDOS's many advantages, many users and programmers resisted it for a time because of their investment in learning the ins and outs of Apple DOS and in Apple-DOS-based software and data formats. A contributing reason was that ProDOS allows only 15 characters in a filename compared to Apple DOS's 30. But Apple's integrated software package AppleWorks, released in 1984, proved a compelling reason to switch, and by the end of 1985 few new software products were being released for the older operating system. Apple IIs continued to be able to boot the older DOS (even the Apple IIGS can boot the older DOS floppies) but as 3.5" floppies and hard disks became more prevalent, most users spent the bulk of their time in ProDOS.

The Apple IIe, also released in 1983, was the first Apple II computer to have 64kB of memory built in. For a while, Apple shipped both DOS 3.3 and ProDOS with new computers.

The original ProDOS was renamed ProDOS 8 when ProDOS 16 was released to support the 16-bit Apple IIgs computer, although ProDOS 16 was soon replaced by GS/OS.

== Requirements ==
All editions of ProDOS require an Apple II series computer or licensed compatible.

ProDOS 8 requires 64kB of memory to run. The original ProDOS (8) 1.0 through 1.0.2 requires only 48kB for the kernel, but nearly all programs, including the BASIC.SYSTEM needed to use Applesoft BASIC, require 64kB, making a 48kB system useless for ProDOS as a practical matter, and support for 48kB machines was removed in version 1.1.

ProDOS 8 version 2.x requires a 65C02 or later (65802, 65816) CPU. ProDOS 8 2.x runs in 64kB, but the utility programs on the system disk require 128kB. Systems with a 6502 CPU instead of a 65C02 must use ProDOS 8 versions prior to version 2.0.

The unofficial "ProDOS 8 2.4," released on August 16, 2016, removes the 65C02 requirement and will run on all Apple II computers with at least 64 KB of RAM, although BASIC.SYSTEM still requires an Applesoft ROM.

ProDOS 16 requires an Apple IIGS.

== Unlicensed Apple II clones ==
With the release of ProDOS version 1.01 and higher, a check was added to see if it was running on an official Apple-manufactured computer. If the word "Apple" is found in the computer's ROM firmware, ProDOS will load up as normal. If anything else is found (e.g. "Golden", "Franklin", "Elite") ProDOS refuses to run, locking up at the boot splash screen. This measure was taken by Apple Computer to discourage use of unlicensed Apple II clones. It is still possible to run newer versions of ProDOS on clones; however, users have to apply a small byte patch to every successive version of ProDOS. Some users go as far as replacing their physical ROM chip(s) with an illegal copied version of Apple's own ROM; or, failing that, a custom patched ROM with "Apple" added in the name.

== Availability ==
ProDOS system disk images can be downloaded legally from a number of user group web sites. It can also be purchased on disk from Syndicomm, which distributes it under license from Apple Computer.

== Disk support ==
ProDOS 8 natively supports Disk II-compatible floppy drives, a RAM drive of approximately 59kB on computers having 128K or more RAM, and block devices whose controllers support the Pascal firmware protocol, a standardized method of accepting block reads and writes originally introduced for use with the UCSD p-System. This latter category includes 3.5" disk and hard drives. Custom block device drivers can be hooked into the OS as well.

== File system ==
ProDOS uses the same file system as the earlier Apple SOS for the Apple III. The SOS/ProDOS file system is native to Apple SOS, ProDOS 8, ProDOS 16, and GS/OS. Some classic Mac OS versions also come with a file system translator to handle this file system.

A volume is allocated in 512-byte blocks. (5.25" floppy disks are still formatted using 256-byte sectors, as this is the format required by the controller ROM to boot the disk. ProDOS simply treats pairs of 256-byte sectors as a single block on such drives.) A volume can have a capacity of up to 32 megabytes, and each file can be up to 16 megabytes. Each volume (floppy disk or hard drive partition) has a "volume name", a filename which is used as the base directory name; having two volumes with the same volume name can result in conflicts. If necessary, ProDOS searches all available drives to find a named volume. Subdirectories are supported, and the concept of a "prefix" (working directory or current path) was provided to make working with subdirectories easier.

File, directory, and volume names can be 1 to 15 characters, starting with a letter, then containing more letters, or digits or periods. Each file entry also contains the 16 bit (2 byte) pointer to the block containing the beginning of the file (or its block index); a 16-bit block count; a 24-bit (3-byte) file size; an 8-bit (1-byte) filetype; a 16-bit auxiliary type (the meaning of which depends upon the filetype); creation and modification timestamps; and data related to how the file is stored on the volume. Sparse files are supported, but files are never "sparsified" by removing zero-filled blocks. The volume header contains similar information as relevant to volumes.

Directories (including the root directory) are sequentially indexed, with each block starting with the address of the previous block (or zero if none) and the subsequent block (or zero if none). The root directory on most disks is initialized to 4 blocks, allowing 51 entries (excluding the volume header). It never changes in size, except by manual intervention with special tools. Subdirectories begin at one block, and grow automatically as needed.

Normal files are progressively indexed. Single-block files (under 513 bytes) have no index block; the directory entry points directly to the block of file data. Files with between 2 and 256 blocks (513 bytes to 128 kB) of data have a single index block, to which the directory entry points, which contains a list of up to 256 data block addresses. Larger files have a master index block containing a list of up to 256 index block addresses. When the Apple IIgs was introduced, a new storage format was introduced for files with two forks, as was typical for IIgs system and program files; the directory entry points to an informational block that tells the computer the storage format of the two forks. These files cannot be read or written natively by ProDOS 8, though the volume itself remains compatible.

The volume has a bitmap of used blocks. Other than this, there is no central file allocation table.

A ProDOS 8 volume formatted by Apple's tools has a boot sector that supports booting both ProDOS and SOS depending on what computer it is booted on. Block 0 is the Apple II boot block and block 1 boots SOS. This allows a disk to be used to boot on either Apple II or Apple III computers by putting both operating system kernels in the top directory: the Apple II boot sector looks for the file PRODOS and the Apple III boot sector looks for the file SOS.KERNEL  Third-party formatting utilities often did not provide the SOS boot block, and some would even mark block 1 available for user data.

ProDOS has no kernel support for other file systems. If necessary, a conversion utility on the main system disk is used to transfer files individually between ProDOS and older Apple DOS 3.3 disks. Because they use a different low-level disk format than DOS 3.3 and ProDOS, transferring data from DOS 3.2 disks to ProDOS is a two-step process using a DOS 3.3 disk as an intermediary (utilizing the DOS 3.3 utility MUFFIN or similar).