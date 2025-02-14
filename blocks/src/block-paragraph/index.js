import { useBlockProps } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks"
import metadata from "./block.json"

registerBlockType(metadata.name, { edit: EditComponent })

function EditComponent(props) {
  function updateSkyColor(e) {
    props.setAttributes({ skyColor: e.target.value })
  }

  function updateGrassColor(e) {
    props.setAttributes({ grassColor: e.target.value })
  }

  return (
    <div {...useBlockProps()}>
      <div className="bg-red-500 border-2 border-blue-300 rounded-md p-5">
				<input
					className="mr-3 p-2 rounded-lg"
					type="text"
					value={props.attributes.skyColor}
					onChange={updateSkyColor}
					placeholder="sky color... sfdsf  sdff s"
				/>
				<input
					className="mr-3 p-2 rounded-lg"
					type="text"
					value={props.attributes.grassColor}
					onChange={updateGrassColor}
					placeholder="grass color.. sdfsfsdf"
				/>
			</div>
    </div>
  )
}