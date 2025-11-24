.note-text.completed {
    text-decoration: line-through;
    opacity: 0.7;
    color: #666;
}

.delete-note-btn {
    background: none;
    border: none;
    color: var(--color-red);
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
    padding: 2px 6px;
    border-radius: 3px;
    transition: background-color 0.2s;
    flex-shrink: 0;
}

.delete-note-btn:hover {
    background-color: var(--color-red);
    color: white;
}

.no-notes-message {
    text-align: center;
    color: #666;
    font-style: italic;
    padding: 20px;
}

/* Botón para añadir una nueva nota. */
.add-note-btn {
    background-color: var(--color-red);
    color: var(--color-white);
    border: none;
    padding: 8px 15px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

/* Estilo para cada elemento individual de la lista de notas. */
.note-item {
    display: flex;
    align-items: center;
    background-color: var(--color-pink-item);
    padding: 8px;
    border-radius: 4px;
    margin-bottom: 8px;
    font-size: 14px;
}

/* Estilo para la casilla de verificación (checkbox) de la nota. */
.note-item input[type="checkbox"] {
    margin-right: 8px;
    accent-color: var(--color-red); 
}

/* Etiqueta del texto de la nota. */
.note-item label {
    flex-grow: 1;
    margin-right: 10px;
}

/* Botón para eliminar una nota. */
.delete-note-btn {
    background: none;
    border: none;
    color: var(--color-red);
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
}
