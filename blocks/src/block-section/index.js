import { useBlockProps, RichText } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks"
import metadata from "./block.json"

registerBlockType(metadata.name, { edit: EditComponent })

export default function EditComponent( {attributes, setAttributes} ) {
  const { headingText, paragraphText } = attributes

  return (
    <div {...useBlockProps()}>
      <RichText 
				className="text-2xl font-bold text-primary leading-[1.3] mb-7"
				tagName={"h2"}
				placeholder={"Enter section heading"}
				value={headingText}
				onChange={(value) => setAttributes({headingText:value})}
			/>
			<RichText 
				className="!text-base !font-medium !text-secondary !leading-[1.8]"
				tagName={"p"}
				placeholder={"Enter section paragraph"}
				value={paragraphText}
				onChange={(value) => setAttributes({paragraphText:value})}
			/>
    </div>
  )
}