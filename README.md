# rvmp-orion
Wordpress plugin for RVMPlayer ([Retro Virtual Machine](https://www.retrovirtualmachine.org/))

## Features

* The rvmp-orion plugin implements the shortcode [rvmp_orion] to embed the Retro Virtual Machine player on your website.
* Always use the latest stable version of RVMP.
* Compatible with at least RVMP 0.1.1
* Enable the Wordpress media library to store `.dsk` and `.hfe` files
* Optional use of remote `.dsk` and `.hfe` files
* Implements all current RVMP parameters

## Installation

The rvmp-orion plugin can be installed directly into your plugins folder "as-is". Enter [here](https://github.com/orionmsx/rvmp-orion/releases/latest) and download the source code (zip).

## Usage

In the content of your post or page, you can insert a `.dsk` or `.hfe` file from the Wordpress media library, or write the shortcode from scratch manually.

`[rvmp_orion contenedor="" ancho="" origen="" huesped="" medio="" programa="" warpsegs="" pause="" video="" videomode=""]`

|  | Description | Default value | Mandatory |
| --------------- | --------------- | --------------- | --------------- |
| contenedor | Container name. Must be unique. You will be able to reference it in your CSS code because it will also be a class. | rvmpcont | :heavy_check_mark: |
| ancho | Player width. The height is calculated automatically. | 400 | :x: |
| origen | Specifies the type of disk file to be loaded. Can be either ‘dsk’ or ‘hfe’. | dsk | :heavy_check_mark: |
| huesped | Machine. Can be either ‘cpc6128’ or ‘plus3’. | cpc6128 | :heavy_check_mark: |
| medio | The URL of the disk file to be loaded into the emulator (https://...). | disco.dsk | :heavy_check_mark: |
| programa | Specifies the string inside the run" command. (In the default value, the full command will be: run"juego) | juego | :heavy_check_mark: |
| warpsegs | Indicates the number of seconds to run in fast warp mode for quick game loading. | 20 | :x: |
| pause | Determines whether to show or hide the pause button in the emulator interface. | true | :x: |
| video | Controls whether to show or hide the video button in the emulator interface. | true | :x: |
| videomode | Sets the default video mode for the emulator. Can be either ’tv’ for a more classic look or ‘hd’ for a sharper, modern appearance. | hd | :x: |

## License

The WordPress Plugin rvmp-orion is licensed under the BSD 3-Clause License. A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

# Credits

* The WordPress Plugin rvmp-orion was written by [Orion](https://orionmsx.com/).
* RVMP and Retro Virtual Machine was written by [Juan Carlos González Amestoy](https://www.retrovirtualmachine.org/).
