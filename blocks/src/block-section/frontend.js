import ReactDOM from "react-dom/client"
// import { RichText } from "@wordpress/block-editor"

const divsToUpdate = document.querySelectorAll(".tailwind-update-me")

divsToUpdate.forEach(div => {
  const data = JSON.parse(div.querySelector("pre").innerText)
  const root = ReactDOM.createRoot(div)
  root.render(<OurComponent {...data} />)
  div.classList.remove("tailwind-update-me")
})

export default function OurComponent(props) {

  return (
    <div>
      <h2 className="text-2xl font-bold text-primary leading-[1.3] mb-5">
        {props.headingText}
      </h2>
      <p className="subtitle">
        {props.paragraphText}
      </p>
    </div>
  )
}